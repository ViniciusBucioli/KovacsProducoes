import { Component, OnInit } from '@angular/core';
import { ProdutoModel } from '../models/produto-model..model';
import { ProdutoService } from '../produto.service';

@Component({
  selector: 'app-produto',
  templateUrl: './produto.component.html',
  styleUrls: ['./produto.component.css']
})
export class ProdutoComponent implements OnInit {

    public produtos: Array<ProdutoModel>;
    public selectedToEdit: number;

    constructor(
        private produtoService: ProdutoService
    ) { }

    ngOnInit() {
        this.getProdutos();
    }

    private getProdutos(){
        this.produtoService.searchProduto('').subscribe(
            (produtos: Array<ProdutoModel>) => {
                this.produtos = produtos;
            },
            this.defaultError
        );
    }

    public saveProduto(produto: ProdutoModel){
        this.produtoService.saveProduto(produto).subscribe(
            () => {},
            this.defaultError
        )
    }

    public deleteProduto(produto: ProdutoModel) {
        this.produtoService.deleteProduto(produto).subscribe(
            () => {
                this.getProdutos();
            },
            this.defaultError
        )
    }

    private defaultError(e: any){
        console.error(e);
    }

}
