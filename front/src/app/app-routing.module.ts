import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { AppComponent } from './app.component';
import { ProdutoComponent } from './cruds/produto/produto.component';
import { GerenteComponent } from './gerente/gerente.component';
import { LandingPageComponent } from './landing-page/landing-page.component';
import { LoginComponent } from './login/login.component';
import { FuncionarioComponent } from './funcionario/funcionario.component';
import { FuncionarioCalendarioComponent } from './funcionario/atividades/funcionario-calendario/funcionario-calendario.component';
import { FuncionarioPainelTarefasComponent } from './funcionario/atividades/funcionario-painel-tarefas/funcionario-painel-tarefas.component';
import { FuncionarioServicesComponent } from './funcionario/atividades/funcionario-services/funcionario-services.component';
import { FuncionarioAtendimentoComponent } from './funcionario/gestao/funcionario-atendimento/funcionario-atendimento.component';
import { FuncionarioClientesComponent } from './funcionario/gestao/funcionario-clientes/funcionario-clientes.component';
import { FuncionarioRelatoriosComponent } from './funcionario/gestao/funcionario-relatorios/funcionario-relatorios.component';
import { FuncionarioCatalogoComponent } from './funcionario/portifolio/funcionario-catalogo/funcionario-catalogo.component';
import { FuncionarioPedidosComponent } from './funcionario/portifolio/funcionario-pedidos/funcionario-pedidos.component';
import { FuncionarioProdutoComponent } from './funcionario/portifolio/funcionario-produto/funcionario-produto.component';

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
        children:[{
            path: '',
            component: FuncionarioComponent,
        },
        {
            path:'atividades',
            children: [
            {
                path: 'calendario',
                component: FuncionarioCalendarioComponent
            },
            {
                path: 'painel-tarefas',
                component: FuncionarioPainelTarefasComponent
            },
            {
                path: 'servicos',
                component: FuncionarioServicesComponent
            }]
        },
        {
            path:'gestao',
            children: [
            {
                path: 'atendimento',
                component: FuncionarioAtendimentoComponent
            },
            {
                path: 'clientes',
                component: FuncionarioClientesComponent
            },
            {
                path: 'relatorios',
                component: FuncionarioRelatoriosComponent
            }]
        },
        {
            path:'portifolio',
            children: [
            {
                path: 'catalogo',
                component: FuncionarioCatalogoComponent
            },
            {
                path: 'pedidos',
                component: FuncionarioPedidosComponent
            },
            {
                path: 'relatorios',
                component: FuncionarioProdutoComponent
            }]
        }]
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
