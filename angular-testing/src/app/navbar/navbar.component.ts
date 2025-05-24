import { Component, Input, ViewChild } from '@angular/core';
import { Router } from '@angular/router';
import { SidebarComponent } from '../sidebar/sidebar.component';
@Component({
  selector: 'app-navbar',
  imports: [],
  templateUrl: './navbar.component.html',
  styleUrl: './navbar.component.css'
})
export class NavbarComponent {
  @ViewChild(SidebarComponent) sidebar!: SidebarComponent;
  @Input() fullName: string = '';
  @Input() currPage: string = '';
  constructor(private router: Router) {}
  redirect(redirect: any) {
    this.router.navigate([redirect]);
  }
  logout() {
    const confirmLogout = confirm('Are you sure you want to log out?');
    if (confirmLogout) {
      // Clear session token from sessionStorage via the service
      sessionStorage.removeItem('session_token');

      // Redirect to login page
      this.router.navigate(['/login']);
    }
  }

  hideShowSideBar(){
    this.sidebar.hideShowSideBar();
  }
}
