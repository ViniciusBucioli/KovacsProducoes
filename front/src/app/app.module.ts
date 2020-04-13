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
import { FuncionarioCalendarioComponent } from './funcionario/atividades/funcionario-calendario/funcionario-calendario.component';
import { FuncionarioServicesComponent } from './funcionario/atividades/funcionario-services/funcionario-services.component';
import { FuncionarioClientesComponent } from './funcionario/gestao/funcionario-clientes/funcionario-clientes.component';
import { FuncionarioRelatoriosComponent } from './funcionario/gestao/funcionario-relatorios/funcionario-relatorios.component';
import { FuncionarioProdutoComponent } from './funcionario/portifolio/funcionario-produto/funcionario-produto.component';
import { FuncionarioCatalogoComponent } from './funcionario/portifolio/funcionario-catalogo/funcionario-catalogo.component';
import { FuncionarioPedidosComponent } from './funcionario/portifolio/funcionario-pedidos/funcionario-pedidos.component';
import { FuncionarioAtendimentoComponent } from './funcionario/gestao/funcionario-atendimento/funcionario-atendimento.component';
import { ClienteInfoComponent } from './funcionario/gestao/funcionario-clientes/cliente-info/cliente-info.component';
import { EnvioPortifolioComponent } from './envio-portifolio/envio-portifolio.component';

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
    FuncionarioHeaderComponent,
    FuncionarioCalendarioComponent,
    FuncionarioServicesComponent,
    FuncionarioClientesComponent,
    FuncionarioRelatoriosComponent,
    FuncionarioProdutoComponent,
    FuncionarioCatalogoComponent,
    FuncionarioPedidosComponent,
    FuncionarioAtendimentoComponent,
    ClienteInfoComponent,
    EnvioPortifolioComponent
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
