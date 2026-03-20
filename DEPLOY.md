# 🚀 AWS S3 Deployment Guide

This guide provides step-by-step instructions for deploying the Africa Digital Procurement Summit 2026 website to Amazon AWS S3 with CloudFront for static hosting.

## 📋 Prerequisites

- **AWS Account** with appropriate permissions
- **AWS CLI** installed and configured
- **Node.js 20+** and **PHP 8.3+** locally
- **Git** for version control

---

## 🏗️ Architecture Overview

```text
┌─────────────────┐    ┌─────────────────┐    ┌─────────────────┐
│   GitHub Repo   │───▶│  AWS S3 Bucket  │───▶│  AWS CloudFront │
│                 │    │   (Static Site) │    │     (CDN)       │
└─────────────────┘    └─────────────────┘    └─────────────────┘
                                │
                                ▼
                       ┌─────────────────┐
                       │   Route 53 DNS  │
                       │   (Optional)    │
                       └─────────────────┘
```

---

## 🛠️ Pre-Deployment Setup

### 1. AWS S3 Bucket Configuration

```bash
# Create S3 bucket (replace with your unique bucket name)
aws s3 mb s3://dpa-summit-2026-prod --region us-east-1

# Enable static website hosting
aws s3 website s3://dpa-summit-2026-prod \
  --index-document index.html \
  --error-document error.html

# Set bucket policy for public access
cat > bucket-policy.json << EOF
{
  "Version": "2012-10-17",
  "Statement": [
    {
      "Sid": "PublicReadGetObject",
      "Effect": "Allow",
      "Principal": "*",
      "Action": "s3:GetObject",
      "Resource": "arn:aws:s3:::dpa-summit-2026-prod/*"
    }
  ]
}
EOF

aws s3api put-bucket-policy \
  --bucket dpa-summit-2026-prod \
  --policy file://bucket-policy.json
```

### 2. CloudFront Distribution

```bash
# Create CloudFront distribution (via AWS Console recommended)
# 1. Go to AWS CloudFront Console
# 2. Create Distribution
# 3. Origin Domain: dpa-summit-2026-prod.s3.amazonaws.com
# 4. Viewer Protocol Policy: Redirect HTTP to HTTPS
# 5. Default Root Object: index.html
# 6. Enable GZIP compression
# 7. Set Custom Error Pages for 403/404 to /index.html
```

---

## 🔧 Build Process

### 1. Local Build Preparation

```bash
# Clone the repository
git clone https://github.com/oyedokunken/dpa-summit-2026.git
cd dpa-summit-2026

# Install dependencies
composer install --optimize-autoloader --no-dev
npm install

# Build production assets
npm run build

# Generate static files
php artisan route:cache
php artisan config:cache
php artisan view:cache

# Export static site (if using Laravel Export package)
composer require --dev spatie/laravel-export
php artisan export:production
```

### 2. Static Export Configuration

Create `config/export.php`:

```php
<?php

return [
    'paths' => [
        public_path(),
    ],
    'disks' => [
        'export' => [
            'driver' => 'local',
            'root' => base_path('dist'),
        ],
    ],
];
```

---

## 🚀 Deployment Script

### 1. Create Deployment Script

Create `deploy.sh`:

```bash
#!/bin/bash

# Configuration
BUCKET_NAME="dpa-summit-2026-prod"
DISTRIBUTION_ID="YOUR_CLOUDFRONT_DISTRIBUTION_ID"
BUILD_DIR="dist"

echo "🚀 Starting deployment to AWS S3..."

# Build the application
echo "📦 Building application..."
npm run build
php artisan export:production

# Sync to S3
echo "📤 Uploading to S3..."
aws s3 sync $BUILD_DIR/ s3://$BUCKET_NAME/ \
  --delete \
  --acl public-read \
  --cache-control "max-age=31536000, public"

# Invalidate CloudFront cache
echo "🔄 Invalidating CloudFront cache..."
aws cloudfront create-invalidation \
  --distribution-id $DISTRIBUTION_ID \
  --paths "/*"

echo "✅ Deployment completed successfully!"
echo "🌐 Your site is live at: https://your-domain.com"
```

### 2. Make Script Executable

```bash
chmod +x deploy.sh
```

---

## 🔒 Security Considerations

### 1. S3 Bucket Security

```bash
# Block public access to bucket ACLs
aws s3api put-public-access-block \
  --bucket dpa-summit-2026-prod \
  --public-access-block-configuration "BlockPublicAcls=true,IgnorePublicAcls=true,BlockPublicPolicy=true,RestrictPublicBuckets=true"

# Enable versioning
aws s3api put-bucket-versioning \
  --bucket dpa-summit-2026-prod \
  --versioning-configuration Status=Enabled
```

### 2. CloudFront Security

- **Enable WAF** for DDoS protection
- **Use SSL/TLS** certificates (AWS Certificate Manager)
- **Set security headers** via Lambda@Edge functions
- **Enable access logs** for monitoring

---

## 📊 Monitoring & Maintenance

### 1. CloudWatch Metrics

```bash
# Create CloudWatch alarm for 5xx errors
aws cloudwatch put-metric-alarm \
  --alarm-name "DPA-Summit-5xx-Errors" \
  --alarm-description "Alert when 5xx errors exceed threshold" \
  --metric-name 5xxErrorRate \
  --namespace "AWS/CloudFront" \
  --statistic Average \
  --period 300 \
  --threshold 5 \
  --comparison-operator GreaterThanThreshold \
  --evaluation-periods 2
```

### 2. Automated Backups

```bash
# Create backup script
cat > backup-s3.sh << EOF
#!/bin/bash
BUCKET_NAME="dpa-summit-2026-prod"
BACKUP_BUCKET="dpa-summit-2026-backup"
DATE=\$(date +%Y%m%d-%H%M%S)

aws s3 sync s3://$BUCKET_NAME/ s3://$BACKUP_BUCKET/\$DATE/ \
  --storage-class GLACIER

echo "Backup completed: \$DATE"
EOF

chmod +x backup-s3.sh
```

---

## 🌍 Environment Configuration

### 1. Production Environment Variables

Create `.env.production`:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com

# Database (if needed for contact forms)
DB_CONNECTION=mysql
DB_HOST=your-rds-endpoint.rds.amazonaws.com
DB_DATABASE=dpa_summit_prod
DB_USERNAME=prod_user
DB_PASSWORD=secure_password

# Mail Configuration
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@dpa-summit.com
MAIL_FROM_NAME="DPA Summit 2026"
MAIL_ADMIN_ADDRESS=admin@dpa-summit.com
MAIL_INQUIRIES_ADDRESS=partnerships@dpa-summit.com

# AWS Configuration
AWS_ACCESS_KEY_ID=your_access_key
AWS_SECRET_ACCESS_KEY=your_secret_key
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=dpa-summit-2026-prod
```

### 2. CI/CD Pipeline (GitHub Actions)

Create `.github/workflows/deploy.yml`:

```yaml
name: Deploy to AWS S3

on:
  push:
    branches: [ main ]

jobs:
  deploy:
    runs-on: ubuntu-latest
    
    steps:
    - uses: actions/checkout@v3
    
    - name: Setup Node.js
      uses: actions/setup-node@v3
      with:
        node-version: '20'
        cache: 'npm'
    
    - name: Setup PHP
      uses: shivammathur/setup-php@v2
      with:
        php-version: '8.3'
        extensions: pdo_mysql, mbstring
        
    - name: Install dependencies
      run: |
        composer install --optimize-autoloader --no-dev
        npm ci
        
    - name: Build application
      run: |
        npm run build
        php artisan export:production
        
    - name: Deploy to S3
      env:
        AWS_ACCESS_KEY_ID: ${{ secrets.AWS_ACCESS_KEY_ID }}
        AWS_SECRET_ACCESS_KEY: ${{ secrets.AWS_SECRET_ACCESS_KEY }}
      run: |
        aws s3 sync dist/ s3://dpa-summit-2026-prod/ --delete --acl public-read
        aws cloudfront create-invalidation --distribution-id ${{ secrets.CLOUDFRONT_DISTRIBUTION_ID }} --paths "/*"
```

---

## 🔄 Rollback Procedures

### 1. Quick Rollback

```bash
# Rollback to previous version
aws s3 sync s3://dpa-summit-2026-backup/previous-version/ s3://dpa-summit-2026-prod/ --delete

# Invalidate CloudFront cache
aws cloudfront create-invalidation \
  --distribution-id $DISTRIBUTION_ID \
  --paths "/*"
```

### 2. Blue-Green Deployment

```bash
# Deploy to staging bucket first
aws s3 sync dist/ s3://dpa-summit-2026-staging/ --delete

# Test staging environment
# ... run tests ...

# Swap production to point to staging
# Update CloudFront origin to staging bucket
```

---

## 📞 Troubleshooting

### Common Issues

1. **403 Forbidden Errors**
   - Check S3 bucket policy
   - Verify CloudFront OAI configuration
   - Ensure objects have public-read ACL

2. **CSS/JS Not Loading**
   - Verify asset paths in built HTML
   - Check CloudFront cache invalidation
   - Ensure Vite build completed successfully

3. **Form Submissions Failing**
   - Check CORS configuration
   - Verify API endpoints are accessible
   - Review Lambda function logs

### Debug Commands

```bash
# Check S3 bucket contents
aws s3 ls s3://dpa-summit-2026-prod/ --recursive

# Test CloudFront distribution
curl -I https://your-domain.com

# Check CloudFront logs
aws s3 ls s3://your-cloudfront-logs-bucket/
```

---

## 📈 Performance Optimization

### 1. Asset Optimization

```javascript
// vite.config.js
export default {
  build: {
    rollupOptions: {
      output: {
        manualChunks: {
          vendor: ['laravel-echo', 'axios'],
          styles: ['tailwindcss'],
        }
      }
    },
    minify: 'terser',
    sourcemap: false,
  }
}
```

### 2. Caching Strategy

```bash
# Set different cache headers for different file types
aws s3 sync dist/ s3://dpa-summit-2026-prod/ \
  --delete \
  --exclude "*.html" \
  --cache-control "max-age=31536000, public"

aws s3 sync dist/ s3://dpa-summit-2026-prod/ \
  --exclude "*" \
  --include "*.html" \
  --cache-control "max-age=0, no-cache, must-revalidate"
```

---

## 🎯 Next Steps

1. **Set up monitoring alerts** for performance metrics
2. **Configure SSL certificates** for custom domains
3. **Implement A/B testing** for conversion optimization
4. **Set up analytics** (Google Analytics, Hotjar)
5. **Create disaster recovery plan** with automated backups

---

## 📞 Support

For deployment issues, contact:

- **DevOps Team:** <devops@gloopro.com>
- **AWS Support:** Available through AWS Console
- **Documentation:** Check project WIKI.md for additional details

---

## Last Updated: March 2026
