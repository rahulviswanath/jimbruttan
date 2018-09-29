import { Component,OnInit } from '@angular/core';
import { AuthenticationService } from './authentication.service';
import { NavbarService } from "../../uielements/navbar.service";
import { Router  }  from '@angular/router';

@Component({
    templateUrl: './login.component.html',
})

export class LoginComponent implements OnInit {
    model: any = {};
    loginError:any = {'status':false,'message':''};

    constructor(
        private authenticationService: AuthenticationService,
        private navbarService: NavbarService,
        private router: Router
        ) { 

        }
    ngOnInit(){
        this.authenticationService.logout(); 
    }
    login() {
        this.authenticationService.login(this.model.username,this.model.password,(result)=>{
            if(result.status == true){
                this.announceLogin();
                this.router.navigate(['/']);
            }else{
                this.loginError.status = true;
                this.loginError.message = result.message;
            }
        })
        
        
        
    }
    announceLogin(){
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if(currentUser && currentUser.token){
            this.navbarService.announceLogin(currentUser);
        }
    }
}