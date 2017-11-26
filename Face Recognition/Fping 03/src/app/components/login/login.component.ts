import { Component, ViewChild, OnInit, Inject, ChangeDetectorRef } from '@angular/core';
import { Http } from '@angular/http';
import { UserRestService } from '../../services/user-rest.service';
import { AuthService } from '../../services/auth.service';
import { Router } from '@angular/router';


@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {
 // private user:any = {};
  imageUrl;
  username;
  fname;
  room;
  password;
  subject;
  loginMethod: string = 'camera';

  constructor(private router: Router, private userRestService: UserRestService, private auth: AuthService, private ref: ChangeDetectorRef) { }

  ngOnInit() {}

  // login method
  login() {
    // set params: password or imageUrl, depending on chosen loginMethod
    var params: any = {
      username: this.username,
      subject: this.subject
     // room: this.room
    };
    if(this.loginMethod === 'password') {
      params.password = this.password;
    }
    else {
      params.image = this.imageUrl;
    }

    // perform http call
    this.userRestService.login( {
      username: this.username,
      password: this.password,
      image: this.imageUrl,
      subject: this.subject,
    })
    .subscribe( data => {
      // on success set token and user data
      var token = data.token;
      var user = data.user;
      this.auth.setToken(token);
      this.auth.setUser({username: user.username, fname: user.fname, room: user.room});
      //this.auth.setUser({room: this.room});

      // navigate to home page
      this.router.navigate(['/home']);
    });
  }

  // image changed handler for embedded components (image picker, camera snapshot)
  imageChanged(data) {
    this.imageUrl = data;
    this.ref.detectChanges();
  }

}
