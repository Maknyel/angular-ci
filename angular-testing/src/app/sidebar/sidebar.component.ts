import { CommonModule } from '@angular/common';
import { Component, Input } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-sidebar',
  imports: [CommonModule],
  templateUrl: './sidebar.component.html',
  styleUrls: ['./sidebar.component.css']
})
export class SidebarComponent {
  @Input() currentPage: string = ''; // Used to highlight the active sidebar item
  
  isVisible = true; // Flag to track sidebar visibility

  constructor(private router: Router) {}

  // Function to toggle sidebar visibility
  hideShowSideBar() {
    this.isVisible = !this.isVisible; // Toggle visibility
  }

  // Method to navigate to a specific page
  redirect(redirect: string) {
    this.router.navigate([redirect]);
  }

  // Sidebar items configuration
  sidebars = [
    { pageName: "Dashboard", redirect: "/" },
    { pageName: "Logs", redirect: "/logs" },
    { pageName: "Users", redirect: "/users" }
  ];
}
