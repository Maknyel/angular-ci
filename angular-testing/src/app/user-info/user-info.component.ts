import { CommonModule } from '@angular/common';
import { Component, ViewChild } from '@angular/core';
import { FormsModule } from '@angular/forms';
import axios from 'axios';
import { AppComponent } from '../app.component'; 
@Component({
  selector: 'app-user-info',
  imports: [FormsModule, CommonModule],
  templateUrl: './user-info.component.html',
  styleUrl: './user-info.component.css'
})
export class UserInfoComponent {
  @ViewChild(AppComponent) appComponent!: AppComponent;
  async ngOnInit() {
    this.getMyData();
  }
  profile = {
    name: '',
    username: '',
    // file: null as File | null
  };

  // onFileChange(event: any) {
  //   const file = event.target.files[0];
  //   if (file) {
  //     this.profile.file = file;
  //   }
  // }

  async getMyData() {
    try {
      const response =await axios.post('https://dl-hosting.net/Marcniel/angular-backend/api/users/'+sessionStorage.getItem('session_token'));
      this.profile.name = response.data.name;
      this.profile.username = response.data.username;
      // this.profile.file = response.data.image_path;
    } catch (error) {
      console.error('Error:', error);
      alert('Invalid credentials');
      throw error;
    }
  }

  async onSubmit() {
    if (this.profile.name && this.profile.username) {
      try {
        const formData = new FormData();
        formData.append('name', this.profile.name);
        formData.append('username', this.profile.username);

        // if (this.profile.file) {
        //   formData.append('image_path', this.profile.file, this.profile.file.name); // Appending file
        // }
        const response =await axios.post('https://dl-hosting.net/Marcniel/angular-backend/api/users/put/'+sessionStorage.getItem('session_token'), 
          formData,
          {
            headers: {
              'Content-Type': 'multipart/form-data', // Important to tell the server it's a file upload
            }
          }
        );
        alert('Successfully Updated');
        // this.appComponent.handleSessionStatus();
      } catch (error) {
        console.error('Error:', error);
        alert('Error');
        throw error;
      }
    } else {
      alert('Please fill in all fields');
    }
  }
}
