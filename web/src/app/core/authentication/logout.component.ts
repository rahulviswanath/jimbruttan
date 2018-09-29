import { Component,OnInit } from '@angular/core';
import { AuthenticationService } from './authentication.service';
import { NavbarService } from "../../uielements/navbar.service";
import { Router  }  from '@angular/router';

@Component({
    templateUrl: './logout.component.html',
})

export class LogoutComponent implements OnInit {
    model: any = {};
    constructor(
        private authenticationService: AuthenticationService,
        private navbarService: NavbarService,
        private router: Router
        ) { 

        }
    ngOnInit(){
        this.authenticationService.logout(); 
        this.announceLogout();
        this.router.navigate(['login']);

    }
    announceLogout(){ 
        this.navbarService.announceLogout();
    }
}