import { Component,OnInit } from '@angular/core';
import { UserService } from './user.service';
import { NavbarService } from "../../uielements/navbar.service";
import { Router  }  from '@angular/router';
import { AuthenticationService } from '../authentication/authentication.service';

@Component({
    templateUrl: './register.component.html',
})

export class RegisterComponent implements OnInit {
    
    user: any = {};
    loading = false;

    constructor(
        private userService: UserService,
        private authenticationService: AuthenticationService,
        private navbarService: NavbarService,
        private router: Router
        ) { 

        }
    ngOnInit(){
        this.authenticationService.logout(); 
    }
    register() {
        //this.loading = true;
        this.userService.create(this.user).subscribe(
            data=>{
                this.router.navigate(['/login']);
            },
            error=>{

            }
        );
    }
    
}