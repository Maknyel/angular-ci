import { Routes } from '@angular/router';
import { DashboardComponent } from './dashboard/dashboard.component';
import { LoginComponent } from './login/login.component';
import { UsersComponent } from './users/users.component';
import { UserInfoComponent } from './user-info/user-info.component';
import { LogsComponent } from './logs/logs.component';

export const routes: Routes = [
    {
        path: '',
        data: { title: 'Dashboard' },
        component: DashboardComponent
    },
    {
        path: 'login',
        data: { title: 'Login' },
        component: LoginComponent
    },
    {
        path: 'users',
        data: { title: 'Users' },
        component: UsersComponent
    },
    {
        path: 'profile',
        data: { title: 'Profile' },
        component: UserInfoComponent
    },
    {
        path: 'logs',
        data: { title: 'Logs' },
        component: LogsComponent
    },
];
