import { Injectable } from '@angular/core';
import { Http, Headers, Response, RequestOptions } from "@angular/http";

@Injectable()

export class Globals{
    public baseUrl = "http://localhost:8000/";

    public jwt() {
        // create authorization header with jwt token
        let currentUser = JSON.parse(localStorage.getItem('currentUser'));
        if (currentUser && currentUser.token) {
            let headers = new Headers({ 'Authorization': 'Bearer ' + currentUser.token });
            return new RequestOptions({ headers: headers });
        }
    }
}
