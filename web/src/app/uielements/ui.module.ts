
import { NgModule }            from '@angular/core';
import { CommonModule }        from '@angular/common';
import { RouterModule }        from '@angular/router';
import { NavBarComponent }      from './navbar.component';

import { NavbarService } from './navbar.service';



@NgModule({
    imports: [
        CommonModule,
        RouterModule,
    ],
    declarations: [
        NavBarComponent, 
        
    ],
    exports: [
        NavBarComponent, 
        
    ],
    providers: [
        NavbarService,
    ]
})
export class UiModule { 
}