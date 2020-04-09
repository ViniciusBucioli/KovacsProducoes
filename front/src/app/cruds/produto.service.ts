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

    public searchProduto(word:string): Observable<any> {
        return this.httpClient.get(`http://localhost:5500/gerente.php?word=${word}`)
    }

    public saveProduto(produto: ProdutoModel): Observable<any> {
        return null;
    }
}
