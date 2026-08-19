<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Multi-Tenant Salon Management System
|--------------------------------------------------------------------------
*/

// Public Landing Page & Discovery Portal
Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/salons', function () {
    return view('landing');
})->name('salons.index');

Route::get('/about', function () {
    return view('landing');
})->name('about');

Route::get('/contact', function () {
    return view('landing');
})->name('contact');

// Authentication Routes
Route::get('/login', function () {
    return 'Authentication Page (Role-Based Access for Super Admin, Salon Owner, Staff, and Client)';
})->name('login');

// --------------------------------------------------------------------------
// Super Admin Platform Portal
// --------------------------------------------------------------------------
Route::prefix('super-admin')->name('super-admin.')->group(function () {
    Route::get('/dashboard', function () {
        return 'Super Admin Platform Portal (Approve Salons, System Usage Metrics)';
    })->name('dashboard');
});

// --------------------------------------------------------------------------
// Tenant Workspace (Salon Owner & Staff Operational Hub)
// --------------------------------------------------------------------------
Route::prefix('tenant')->name('tenant.')->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return 'Tenant Dashboard (Daily Revenue, Upcoming Appointments, Active Staff)';
    })->name('dashboard');

    // Service Management Module
    Route::get('/services', function () {
        return 'Service Management Module (Service Menus, Local Pricing, Duration)';
    })->name('services');

    // Staff Management & Commission Tracking Page
    Route::get('/staff', function () {
        return 'Staff Management Page (Profiles, Roles, Schedules, Payroll & Commissions)';
    })->name('staff');

    // Appointment Queueing & Walk-in Page
    Route::get('/queue', function () {
        return 'Appointment Queueing & Walk-in Page';
    })->name('queue');

    // Client CRM & Digital Loyalty Card Module
    Route::get('/crm', function () {
        return 'Client CRM & Isolated Digital Loyalty Card Module';
    })->name('crm');

    // Point of Sale (POS) Page
    Route::get('/pos', function () {
        return 'Point of Sale (POS) Page (Software Cash Recording & Receipt Generation)';
    })->name('pos');

    // Sales & Analytics Reporting
    Route::get('/reports', function () {
        return 'Sales & Analytics Reporting (Revenue, Popular Services, Staff Productivity)';
    })->name('reports');
});

// --------------------------------------------------------------------------
// Client Discovery & Booking Portal
// --------------------------------------------------------------------------
Route::prefix('client')->name('client.')->group(function () {
    Route::get('/booking', function () {
        return 'Client Booking Portal & Stylist Availability';
    })->name('booking');
});
