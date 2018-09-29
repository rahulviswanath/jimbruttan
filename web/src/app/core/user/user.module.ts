import { NgModule } from '@angular/core';
import { CommonModule }        from '@angular/common';
import { FormsModule }    from '@angular/forms';
import { RouterModule }        from '@angular/router';
import {HttpModule} from '@angular/http';

import { UserService } from './user.service';

import { RegisterComponent } from './register.component';
import { Globals } from "../../globals.service";

@NgModule({
    imports:[
        CommonModule,
        RouterModule,
        FormsModule,
        HttpModule
    ],
    declarations:[
        RegisterComponent,
        
    ],
    providers:[
       UserService,
       Globals 
    ],
    exports:[
        
        
    ]

})
 export class UserModule{

 }