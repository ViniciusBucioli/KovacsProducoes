import { Component, OnInit } from '@angular/core';
import { LoginService } from './login.service';
import { Router } from '@angular/router';
import { NgForm } from '@angular/forms';
import { SessionStorageService } from '../session-storage.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

    constructor(
        private loginService: LoginService,
        private router: Router,
        private sessionStorage: SessionStorageService
    ) { }

    ngOnInit() {
    }

    public login(form: NgForm) {
        if (form.valid){
            this.loginService.login(form.value.email, form.value.pass).subscribe(
                (path: any) => {
                    this.router.navigateByUrl(path.path);
                }, 
                (e: any) => {
                    console.log(e);
                }
            )
        }
    }

}
