import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { ProdutoComponent } from './cruds/produto/produto.component';
import { GerenteComponent } from './gerente/gerente.component';

const routes: Routes = [
    {
        path:'',
        component: AppComponent
    },
    {
        path:'gerente',
        component: GerenteComponent
    }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
