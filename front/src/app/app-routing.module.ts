import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { ProdutoComponent } from './cruds/produto/produto.component';
import { GerenteComponent } from './gerente/gerente.component';
import { LandingPageComponent } from './landing-page/landing-page.component';
import { LoginComponent } from './login/login.component';
import { FuncionarioComponent } from './funcionario/funcionario.component';

const routes: Routes = [
    {
        path:'',
        component: LandingPageComponent
    },
    {
        path:'gerente',
        component: GerenteComponent
    },
    {
        path:'funcionario',
        component: FuncionarioComponent
    },
    {
        path:'login',
        component: LoginComponent
    }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
