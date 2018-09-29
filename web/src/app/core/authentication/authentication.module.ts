import { NgModule } from '@angular/core';
import { CommonModule }        from '@angular/common';
import { FormsModule }    from '@angular/forms';
import { RouterModule }        from '@angular/router';
import {HttpModule} from '@angular/http';

import { AuthenticationService } from './authentication.service';

import { LoginComponent } from './login.component';
import { LogoutComponent } from './logout.component';

@NgModule({
    imports:[
        CommonModule,
        RouterModule,
        FormsModule,
        HttpModule
    ],
    declarations:[
        LoginComponent,
        LogoutComponent
    ],
    providers:[
        AuthenticationService,
        
    ],
    exports:[
        LoginComponent,
        LogoutComponent
    ]

})
 export class AuthenticationModule{

 }