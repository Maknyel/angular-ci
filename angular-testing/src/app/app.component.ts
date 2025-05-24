import { Component } from '@angular/core';
import { Router, NavigationEnd, RouterOutlet, ActivatedRoute } from '@angular/router';
import { NavbarComponent } from './navbar/navbar.component';
import { SidebarComponent } from './sidebar/sidebar.component';
import { CommonModule } from '@angular/common';
import axios from 'axios';

@Component({
  selector: 'app-root',
  imports: [RouterOutlet, NavbarComponent, SidebarComponent, CommonModule],
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'Time In and Time Out';
  sessionIn: boolean = false;
  hasNav: boolean = false;
  hasSidebar: boolean = false;
  isLoginAlready: boolean = false;
  currentPage: string = '';
  fullName: string = '';
  currPage: string = 'Dashboard';

  constructor(private router: Router, private activatedRoute: ActivatedRoute) {}

  async ngOnInit() {
    // Handle session status on component load
    await this.handleSessionStatus();

    // Subscribe to router events to detect route changes
    this.router.events.subscribe(event => {
      if (event instanceof NavigationEnd) {
        let routeData: any = this.activatedRoute.snapshot.firstChild?.data;
        this.currPage = routeData?.title;
        this.handleSessionStatus();
      }
    });
  }

  // Method to check session status and manage login state
  async handleSessionStatus() {
    this.currentPage = this.router.url; // Update current page URL

    // Check if session token is available in sessionStorage
    if (sessionStorage.getItem('session_token') === null) {
      // User is not logged in
      this.hasNav = false;
      this.hasSidebar = false;
      this.isLoginAlready = false;
      if (this.router.url !== '/login') {
        this.router.navigate(['/login']); // Redirect to login page
      }
    } else {
      // User is logged in, fetch user details
      try {
        const response =await axios.get(
          'https://dl-hosting.net/Marcniel/angular-backend/api/users/' + sessionStorage.getItem('session_token')
        );
        this.fullName = response.data.name;
        this.hasNav = true; // Show navbar
        this.hasSidebar = true; // Show sidebar
        this.isLoginAlready = true; // User is logged in
      } catch (error) {
        console.error('Error:', error);
        alert('Invalid credentials');
        throw error;
      }
    }
  }
}
