import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { UiModule }       from './uielements/ui.module';
import { AuthenticationModule } from './core/authentication/authentication.module';
import { UserModule } from './core/user/user.module';


import { AppComponent } from './app.component';

import { routing } from './app.routing';
import { authenticationRouting }  from './core/authentication/authentication.routing';
import { userRouting }  from './core/user/user.routing';

@NgModule({
  declarations: [
    AppComponent
  ],
  imports: [
    BrowserModule,
    UiModule,
    AuthenticationModule,
    UserModule,
    routing,
    authenticationRouting,
    userRouting
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
