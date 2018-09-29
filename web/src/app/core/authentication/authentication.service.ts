import { Injectable } from "@angular/core";
import { Http, Headers, Response, RequestOptions } from "@angular/http";
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map'

@Injectable()

export class AuthenticationService {
    public token: string;
    public errorType:any = {
        'user_not_found':'Invalid User',
    };
    constructor(private http: Http) {
         let currentUser = JSON.parse(localStorage.getItem('currentUser'));
         this.token = currentUser && currentUser.token;
    }
    login(username: string, password: string,callback:(data)=>void) {
        let headers = new Headers({ 'Content-Type': 'application/x-www-form-urlencoded' });
        let options = new RequestOptions({ headers });
        let body = new URLSearchParams();
        body.append('username', username);
        body.append('password', password);

        return this.http.post("http://localhost:8000/auth/login", body.toString(), options)
            .map((response: Response) => {
                let user = response.json();
                if (user && user.token) {
                    // store user details and jwt token in local storage to keep user logged in between page refreshes
                    localStorage.setItem('currentUser', JSON.stringify(user));
                    callback({'status':true,'message':'Logged Successfully'});
                }else{
                    if(typeof this.errorType[user] !== 'undefined')
                        callback({'status':false,'message':this.errorType[user]});
                    else
                        callback({'status':false,'message':'Something went wrong.'});
                }

                
            }).subscribe();
    }
    logout(): void {
        this.token = null;
        localStorage.removeItem('currentUser');
    }

}