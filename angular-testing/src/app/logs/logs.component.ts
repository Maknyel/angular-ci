import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import axios from 'axios';
interface Logs {
  date: string;
  time_in: string;
  time_out: string;
  created_at: string;
  updated_at: string;
}
@Component({
  selector: 'app-logs',
  imports: [CommonModule],
  templateUrl: './logs.component.html',
  styleUrl: './logs.component.css'
})
export class LogsComponent {
  logs: Logs[] = [];
  isLoaded: boolean = false;
  async ngOnInit() {
    this.getLogs();
  }

  async getLogs(){
    try {
      const response =await axios.post('https://dl-hosting.net/Marcniel/angular-backend/api/logs/user/'+sessionStorage.getItem('session_token'));
      this.logs = response.data;
      this.isLoaded = true;
    } catch (error) {
      alert('Invalid request');
      throw error;
    }
  }
}
