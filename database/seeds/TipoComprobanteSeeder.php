<?php

use Illuminate\Database\Seeder;
use App\Models\Tipo_comprobante;

class TipoComprobanteSeeder extends Seeder
{
    /**
     *Datos de la tabla TIPO COMPROBANTE
     *
     * @return void
     */
    public function run()
    {
        //
        Tipo_comprobante::create([
          "unece" => "308",
          "denominacion" => "FACTURA",
          "abreviatura" => "FACT",
          "descripcion" => "COMPROBANTE DE COMPRA Y VENTA"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "RECIBO POR HONORARIOS",
          "abreviatura" => "R/H"
        ]);
        Tipo_comprobante::create([
          "unece" => "346",
          "denominacion" => "BOLETA DE VENTA",
          "abreviatura" => "B/V",
          "descripcion" => "COMPROBANTE DE COMPRA Y VENTA"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "LIQUIDACION DE COMPRA",
          "abreviatura" => "LIQ"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "BOLETO CIA AVIACION TRANS. PAS",
          "abreviatura" => "BOL"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "CARTA PARTE AEREO",
          "abreviatura" => "CAR"
        ]);
        Tipo_comprobante::create([
          "unece" => "381",
          "denominacion" => "NOTA DE CREDITO",
          "abreviatura" => "N/C"
        ]);
        Tipo_comprobante::create([
          "unece" => "383",
          "denominacion" => "NOTA DE DEBITO",
          "abreviatura" => "N/D"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "GUIA DE REMISION REMITENTE",
          "abreviatura" => "GUI",
          "descripcion" => "DOC. DE MOVIMIENTO DE MERCADERIA"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "RECIBO POR ARRENDAMIENTO",
          "abreviatura" => "R/A"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "TICKET",
          "abreviatura" => "TICK",
          "descripcion" => "COMPROBANTE DE COMPRA Y VENTA"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "DOCUMENTO EMITIDO POR BANCOS, INSTITUCIONES FINANCIERAS, CREDITICIAS Y DE SEGUROS QUE SE ENCUENTREN BAJO EL CONTROL DE LA SUPERINTENDENCIA DE BANCA Y SEGUROS"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "RECIBO POR SERVICIOS PUBLICOS",
          "abreviatura" => "REC"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "DOCUMENTOS EMITIDOS POR LAS AFP"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "NOTA DE ENTRADA A ALMACEN",
          "abreviatura" => "NEA",
          "descripcion" => "DOCUMENTO ENTRADA/SALIDA ALMACEN"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "PEDIDO COMPROBANTE DE SALIDA",
          "abreviatura" => "PECOSA",
          "descripcion" => "DOCUMENTO ENTRADA/SALIDA ALMACEN"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "GUIA DE REMISION TRANSPORTISTA"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "COTIZACION",
          "abreviatura" => "COT",
          "descripcion" => "DOCUMENTO DE COTIZACION"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "ORDEN DE COMPRA",
          "abreviatura" => "O/C",
          "descripcion" => "DOCUMENTO DE ORDEN DE COMPRA"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "NOTA DE PEDIDO",
          "abreviatura" => "N/P",
          "descripcion" => "COMPROBANTE DE COMPRA Y VENTA"
        ]);
        Tipo_comprobante::create([
          "denominacion" => "SOLICITUD DE COTIZACION",
          "abreviatura" => "SOL/COT",
          "descripcion" => "DOCUMENTO DE SOLICITUD DE COTIZACION"
        ]);
    }
}
