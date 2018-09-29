import { Injectable } from "@angular/core";
import { Subject } from "rxjs/Subject";

@Injectable()

export class NavbarService{
   loginAnnouncedSource = new Subject<string>();
   logoutAnnouncedSource = new Subject<string>();

    announceLogin(announcedData:string){
        this.loginAnnouncedSource.next(announcedData);
    }
    announceLogout(){
        this.logoutAnnouncedSource.next(null);
    }
}