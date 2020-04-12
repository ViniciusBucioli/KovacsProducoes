import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginComponent } from './login/login.component';
import { ProdutoComponent } from './cruds/produto/produto.component';
import { HttpClientModule } from '@angular/common/http';
import { GerenteComponent } from './gerente/gerente.component';

import { GerenteSidebarComponent } from './gerente/gerente-sidebar/gerente-sidebar.component';
import { FormsModule } from '@angular/forms';
import { LandingPageComponent } from './landing-page/landing-page.component';
import { ForgotPassComponent } from './login/forgot-pass/forgot-pass.component';
import { FuncionarioComponent } from './funcionario/funcionario.component';
import { FuncionarioSidebarComponent } from './funcionario/funcionario-sidebar/funcionario-sidebar.component';
import { FuncionarioHeaderComponent } from './funcionario/funcionario-header/funcionario-header.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginComponent,
    ProdutoComponent,
    GerenteComponent,
    GerenteSidebarComponent,
    LandingPageComponent,
    ForgotPassComponent,
    FuncionarioComponent,
    FuncionarioSidebarComponent,
    FuncionarioHeaderComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
