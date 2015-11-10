<?php

// ---------------- WARNING ---------------- //
//                                           //
//   DO NOT CHANGE THE VALUES IN THIS FILE   //
//                                           //
// ----------------------------------------- //


// DEFAULT TEMPLATE VARIABLES & EXPLANATIONS  ----------------------------------------------//
// Each are set to false by default. They are overridden with the statements in the next section

  $hasSlateForm = false; // Toggles the background for the form
  $isLongForm = false; // Toggles long-form layout

  // Full Width Layouts
  $noSidebar = false; // Toggles fullwidth layout
    $hasWebinar = false; // Toggles the Webinar section
    $isThankYouPage = false; // Toggles thank you page layout
      $hasForm = false; // Toggles the form on the thank you page layout
      $hasDownloadButton = false; // Toggles the download button on the thank you page

  // Special eBook template
  $isEBook = false;

  // Special Form Forwarding Templates
  $isFormForwarding = false; // Adds HO Branding to template


// OVERRIDES BASED UPON THEME SELECTION  ----------------------------------------------//

// STANDARD TEMPLATES ---------------------------- //
  // WHITE FORM
  if($template == 'standard-white') {

  }

  // SLATE FORM
  if($template == 'standard-slate') {
    $hasSlateForm = true;
  }

// HO FORM FORWARDING TEMPLATES ---------------------------- //
  // WHITE FORM
  if($template == 'standard-white-hasoffers') {
    $isFormForwarding = true;
  }

  // SLATE FORM
  if($template == 'standard-slate-hasoffers') {
    $hasSlateForm = true;
    $isFormForwarding = true;
  }

// LONG COPY FORMAT TEMPLATES ---------------------------- //
  // WHITE FORM
  if($template == 'longcopy-white') {
    $isLongForm = true;
  }

  // SLATE FORM
  if($template == 'longcopy-slate') {
    $hasSlateForm = true;
    $isLongForm = true;
  }

// FULL WIDTH TEMPLATES ---------------------------- //
  // WITHOUT WEBINAR
  if($template == 'fullwidth-slate') {
    $hasSlateForm = true;
    $noSidebar = true;
  }

  // WITH WEBINAR
  if($template == 'webinar-slate') {
    $hasSlateForm = true;
    $noSidebar = true;
    $hasWebinar = true;
  }

// EBOOK TEMPLATES ---------------------------- //
  // WHITE FORM
  if($template == 'ebook-ltgrey') {
    $isEBook = true;
  }

  // SLATE FORM
  if($template == 'ebook-slate') {
    $hasSlateForm = true;
    $isEBook = true;
  }

// THANK YOU TEMPLATES ---------------------------- //
  // NO FORM, NO BUTTON
  if($template == 'thankyou-slate') {
    $hasSlateForm = true;
    $noSidebar = true;
    $isThankYouPage = true;
    $hasForm = true;
  }

  // SLATE FORM, NO BUTTON
  if($template == 'thankyou-noform') {
    $noSidebar = true;
    $isThankYouPage = true;
  }

  // NO FORM, WITH BUTTON
  if($template == 'thankyou-hasbutton-slate') {
    $hasSlateForm = true;
    $noSidebar = true;
    $isThankYouPage = true;
    $hasDownloadButton = true;
    $hasForm = true;
  }

  // SLATE FORM, WITH BUTTON
  if($template == 'thankyou-hasbutton-noform') {
    $noSidebar = true;
    $isThankYouPage = true;
    $hasDownloadButton = true;
  }




