import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import axios from 'axios';
interface Logs {
  user_id: string;
  date: string;
  time_in: string;
  time_out: string;
  created_at: string;
  updated_at: string;
}
@Component({
  selector: 'app-dashboard',
  imports: [CommonModule],
  templateUrl: './dashboard.component.html',
  styleUrl: './dashboard.component.css'
})
export class DashboardComponent {
  logs: any = [];
  isLoaded: boolean = false;
  async ngOnInit() {
    this.getLogs();
  }

  async getLogs(){
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-indexed
    const dd = String(today.getDate()).padStart(2, '0');

    const todayDate = `${mm}/${dd}/${yyyy}`;
    try {
      const params = new URLSearchParams();
      params.append('user_id', sessionStorage.getItem('session_token') ?? '');
      params.append('dateToday', todayDate);
      const response = await axios.post('https://dl-hosting.net/Marcniel/angular-backend/api/logs/today',params);
      this.logs = response.data;
      this.isLoaded = true;
    } catch (error) {
      alert('Invalid request');
      throw error;
    }
  }

  async time_in(){
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-indexed
    const dd = String(today.getDate()).padStart(2, '0');

    const todayDate = `${mm}/${dd}/${yyyy}`;


    // Time components
    let hours: any = today.getHours();
    const minutes = String(today.getMinutes()).padStart(2, '0');
    const seconds = String(today.getSeconds()).padStart(2, '0');

    // Determine AM or PM
    const ampm = hours >= 12 ? 'PM' : 'AM';

    // Convert hours to 12-hour format
    hours = hours % 12;
    hours = hours ? String(hours).padStart(2, '0') : '12';  // The hour '0' should be '12'

    // Format time as HH:MM:SS a (AM/PM)
    const todayTime = `${hours}:${minutes}:${seconds} ${ampm}`;
    try {
      const params = new URLSearchParams();
      params.append('user_id', sessionStorage.getItem('session_token') ?? '');
      params.append('date', todayDate);
      params.append('time_in', todayTime);
      const response = await axios.post('https://dl-hosting.net/Marcniel/angular-backend/api/logs/timeIn',params);
      if(response.data){
        alert("Successfully Time In");
        this.getLogs();
      }
      
    } catch (error) {
      alert('Invalid request');
      throw error;
    }
  }

  async time_out(){
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // Months are zero-indexed
    const dd = String(today.getDate()).padStart(2, '0');

    const todayDate = `${mm}/${dd}/${yyyy}`;


    let hours: any = today.getHours();
    const minutes = String(today.getMinutes()).padStart(2, '0');
    const seconds = String(today.getSeconds()).padStart(2, '0');

    // Determine AM or PM
    const ampm = hours >= 12 ? 'PM' : 'AM';

    // Convert hours to 12-hour format
    hours = hours % 12;
    hours = hours ? String(hours).padStart(2, '0') : '12';  // The hour '0' should be '12'

    // Format time as HH:MM:SS a (AM/PM)
    const todayTime = `${hours}:${minutes}:${seconds} ${ampm}`;
    try {
      const params = new URLSearchParams();
      params.append('user_id', sessionStorage.getItem('session_token') ?? '');
      params.append('id', this.logs.id);
      params.append('date', todayDate);
      params.append('time_out', todayTime);
      const response = await axios.post('https://dl-hosting.net/Marcniel/angular-backend/api/logs/timeOut',params);
      if(response.data){
        alert("Successfully Time Out");
        this.getLogs();
      }
      
    } catch (error) {
      alert('Invalid request');
      throw error;
    }
  }
}
