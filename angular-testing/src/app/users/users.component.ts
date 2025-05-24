import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import axios from 'axios';
interface User {
  name: string;
  username: string;
  image_path: string;
  created_at: string;
  updated_at: string;
}

@Component({
  selector: 'app-users',
  imports: [CommonModule],
  templateUrl: './users.component.html',
  styleUrl: './users.component.css'
})

export class UsersComponent {
  users: User[] = [];
  isLoaded: boolean = false;
  async ngOnInit() {
    this.getUsers();
  }

  async getUsers(){
    try {
      const response =await axios.post('https://dl-hosting.net/Marcniel/angular-backend/api/users');
      this.users = response.data;
      this.isLoaded = true;
    } catch (error) {
      alert('Invalid request');
      throw error;
    }
  }
}

