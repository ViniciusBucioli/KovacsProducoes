import { Injectable } from '@angular/core';
import { ProdutoModel } from './models/produto-model..model';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ProdutoService {

    constructor(
        private httpClient: HttpClient
    ) { }

    public search(word:string): Observable<any> {
        return this.httpClient.get(`http://localhost:5500/controller/produto/ProdutoControllerListar.php?word=${word}`);
    }

    public insert(produto: ProdutoModel): Observable<any> {
        return this.httpClient.post(`http://localhost:5500/controller/produto/ProdutoControllerCadastro.php`, produto);
    }

    public update(produto: ProdutoModel): Observable<any> {
        return this.httpClient.put(`http://localhost:5500/controller/produto/ProdutoControllerAtualizar.php`, produto);
    }

    public delete(id: number): Observable<any> {
        return null
    }
}
