import { Injectable } from '@angular/core';
import { HttpClient, HttpParams, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class PhpService {

    private headers: any;

    constructor(
        private httpClient: HttpClient
    ) {
        this.headers = {headers: new HttpHeaders({'Content-Type':'application/json; charset=utf-8'}) };
    }

    public get<T>(url:string): Observable<any> {
        return this.httpClient.get(url);
    }
    public post<T>(url:string, body: any): Observable<any> {
        return this.httpClient.post(url,this.toHttp(body), this.headers);
    }
    public put<T>(url:string, body: any): Observable<any> {
        return this.httpClient.post(url,this.toHttp(body), this.headers);
    }
    public delete<T>(url:string, number: number): Observable<any> {
        return this.httpClient.post(url,this.toHttp(number), this.headers);
    }

    
    public toHttp(obj: any) {
        let params = new HttpParams();
        Object.keys(this).forEach(function (item) {  
            params = params.set(item, this[item]);
        });
        return params;
    }
}
