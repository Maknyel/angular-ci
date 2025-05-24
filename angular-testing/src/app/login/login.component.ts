import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import axios from 'axios';

@Component({
  selector: 'app-login',
  imports: [FormsModule],
  templateUrl: './login.component.html',
  styleUrl: './login.component.css'
})
export class LoginComponent {
  username: string = '';
  password: string = '';

  constructor(private router: Router) {}

  async onSubmit() {
    // In a real app, you would call an API to validate the user credentials
    // alert(this.username);
    // alert(this.password);
    try {
      const params = new URLSearchParams();
      params.append('username', this.username);
      params.append('password', this.password);
      const response = await axios.post('https://dl-hosting.net/Marcniel/angular-backend/api/users/login', params);
      console.log('Data:', response.data);
      if(response.data != 'Incorrect username or password. Please try again'){
        sessionStorage.setItem('session_token', response.data.id);
        alert('Welcome');
        this.router.navigate(['']);
      }else{
        alert('Invalid credentials');
      }
      
    } catch (error) {
      console.error('Error:', error);
      alert('Invalid credentials');
      throw error;
    }
  }
}
