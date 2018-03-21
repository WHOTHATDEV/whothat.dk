<?php


  $ins = file_get_contents('assets/icons/instagram.svg');
  $fb = file_get_contents('assets/icons/facebook.svg');
  $linked = file_get_contents('assets/icons/linkedin.svg');
  $vim = file_get_contents('assets/icons/vimeo.svg');

  // echo $ins;
  //   echo $fb;


  $SoMe = [
    'instagram' => [
      'link' => 'https://www.instagram.com/explore/locations/1014271099/whothat/',
      'icon' => $ins],
    'facebook' => [
      'link' => 'https://www.facebook.com/whothatdenmark/',
      'icon' => $fb],
    'linkedin' => [
      'link' => 'https://www.linkedin.com/company/whothat/',
      'icon' => $linked]
  ];
