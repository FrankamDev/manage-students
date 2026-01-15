<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

 public $sidebarOpen = false;
 public $activeSection = 'dashboard';

 // Méthode pour toggle la sidebar (mobile)
 public function toggleSidebar()
 {
  $this->sidebarOpen = !$this->sidebarOpen;
 }


 public function setSection($section)
 {
  $this->activeSection = $section;
  $this->sidebarOpen = false;
 }

 public function render()
 {
  return view('livewire.dashboard');
 }
}
