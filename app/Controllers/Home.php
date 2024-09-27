<?php

namespace App\Controllers;
use App\Models\TrialModel;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function header()
    {
        return view('header');
    }
    public function footer()
    {
        return view('footer');
    }
    public function BookFreeTrail()
    {
        return view('book-free-trail');
    }
    public function SaveFreeTrial()
    {
        $model = new TrialModel();
    
        // Validate the form input
        if ($this->validate([
            'phone'      => 'required|max_length[15]',
            'age_group'  => 'required|max_length[10]',
            'trial_date' => 'required',
        ])) {
            // Get the phone number from the form
            $phone = $this->request->getPost('phone');
    
            // Check if the phone number already exists
            $existingTrial = $model->where('phone', $phone)->first();
            if ($existingTrial) {
                // Phone number already exists, redirect with an error message
                return redirect()->to('/book-free-trail')->withInput()->with('error', 'This mobile number has already registered for a free trial.');
            }
    
            // Get form data
            $data = [
                'phone'      => $phone,
                'age_group'  => $this->request->getPost('age_group'),
                'trial_date' => $this->request->getPost('trial_date'),
                'is_active'  => 1, // Default value for is_active
            ];
    
            // Insert data into the database
            if ($model->insert($data)) {
                return redirect()->to('/book-free-trail')->with('success', 'Trial registered successfully.');
            } else {
                return redirect()->to('/book-free-trail')->with('error', 'Failed to register trial.');
            }
        } else {
            return redirect()->to('/book-free-trail')->withInput()->with('error', 'Validation failed.');
        }
    }
    
    

}
