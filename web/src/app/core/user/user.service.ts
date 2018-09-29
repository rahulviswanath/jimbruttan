import { Injectable } from "@angular/core";
import { Http, Headers, Response, RequestOptions } from "@angular/http";
import { Observable } from 'rxjs/Observable';
import 'rxjs/add/operator/map';
import { User } from "./user";
import { Globals } from "../../globals.service";

@Injectable()
export class UserService{
    private baseUrl;
    constructor(private http:Http,private globals:Globals){
        this.baseUrl = globals.baseUrl;console.log(this.baseUrl);
    }
    getAll(){
        return this.http.get(this.baseUrl+'users',this.globals.jwt()).map((response:Response)=>response.json());
    }
    getById(id:number){
        return this.http.get(this.baseUrl+'users/'+id,this.globals.jwt()).map((response:Response)=>response.json());
    }
    create(user:User){
        return this.http.post(this.baseUrl+'users',user).map((response:Response)=>response.json());
    }
    update(user:User){
        return this.http.put(this.baseUrl+'users/'+user.id,user,this.globals.jwt()).map((response:Response)=>response.json());
    }
    delete(id:number){
        return this.http.delete(this.baseUrl+'users/'+id,this.globals.jwt()).map((response:Response)=>response.json());
    }
}