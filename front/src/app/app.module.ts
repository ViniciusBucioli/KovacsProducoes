import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginComponent } from './login/login.component';
import { ProdutoComponent } from './cruds/produto/produto.component';
import { HttpClientModule } from '@angular/common/http';
import { GerenteComponent } from './gerente/gerente.component';
import { SidebarComponent } from './gerente/sidebar/sidebar.component';
import { GerenteSidebarComponent } from './gerente/gerente-sidebar/gerente-sidebar.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    ProdutoComponent,
    GerenteComponent,
    SidebarComponent,
    GerenteSidebarComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
