<?php

namespace App\Http\Controllers;

use App\Services\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;

class RegistrationController extends Controller
{
    private MailService $mailService;

    public function __construct(MailService $mailService)
    {
        $this->mailService = $mailService;
    }

    public function showForm()
    {
        return view('register');
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'job_title' => 'required|string|max:150',
            'company' => 'required|string|max:200',
            'company_size' => 'required|in:1-50,51-200,201-500,501-1000,1000+',
            'industry' => 'required|string|max:100',
            'current_erp' => 'nullable|string|max:100',
            'procurement_challenges' => 'required|array|min:1',
            'interest_areas' => 'required|array|min:1',
            'dietary_requirements' => 'nullable|string|max:500',
            'special_needs' => 'nullable|string|max:500',
            'marketing_consent' => 'required|boolean',
            'terms_accepted' => 'required|accepted',
        ], [
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'email.required' => 'Email address is required',
            'email.email' => 'Please provide a valid email address',
            'phone.required' => 'Phone number is required',
            'job_title.required' => 'Job title is required',
            'company.required' => 'Company name is required',
            'company_size.required' => 'Company size is required',
            'industry.required' => 'Industry is required',
            'procurement_challenges.required' => 'Please select at least one procurement challenge',
            'interest_areas.required' => 'Please select at least one area of interest',
            'terms_accepted.accepted' => 'You must accept the terms and conditions',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $registrationData = $request->all();
            $registrationData['full_name'] = $request->first_name . ' ' . $request->last_name;

            // Send confirmation email
            $emailSent = $this->mailService->sendRegistrationConfirmation($registrationData);

            if (!$emailSent) {
                Log::error('Failed to send registration confirmation email', [
                    'email' => $request->email,
                    'name' => $registrationData['full_name']
                ]);
                
                return response()->json([
                    'success' => false,
                    'message' => 'Registration received but confirmation email failed. Please contact support.'
                ], 500);
            }

            // Log successful registration
            Log::info('New registration submitted', [
                'email' => $request->email,
                'name' => $registrationData['full_name'],
                'company' => $request->company,
                'timestamp' => now()
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Registration successful! Please check your email for confirmation.',
                'data' => [
                    'name' => $registrationData['full_name'],
                    'email' => $request->email
                ]
            ]);

        } catch (\Exception $e) {
            Log::error('Registration submission failed', [
                'error' => $e->getMessage(),
                'email' => $request->email,
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'An error occurred during registration. Please try again or contact support.'
            ], 500);
        }
    }

    public function showConfirmation()
    {
        return view('registration-confirmation');
    }
}
