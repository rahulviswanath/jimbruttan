import { Component, OnInit } from '@angular/core';
import { NavbarService } from "./navbar.service";
import { Subscription }   from 'rxjs/Subscription';

@Component({
    selector: 'navbar',
    templateUrl: './navbar.component.html',
    styleUrls:  ['./navbar.component.css']
})
export class NavBarComponent implements OnInit{
    public currentUser:any;
    ngOnInit(){
        this.currentUser = JSON.parse(localStorage.getItem('currentUser'));
    }
    constructor(private navbarService: NavbarService){
        navbarService.loginAnnouncedSource.subscribe(currentUser=>{
            this.currentUser = currentUser;
        });
        navbarService.logoutAnnouncedSource.subscribe(currentUser=>{
            this.currentUser = currentUser;
        });
    }
}