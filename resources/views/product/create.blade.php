<div>
    <form method="post" action="/products">
        @csrf
        <table border="1" bordercolor="white" bgcolor="gray" align="center" width="700" style="border-collapse: collapse; margin-top: 50px;">
            <tr>
                <td colspan="2" align="center">
                    <h1><font color="white">Create Produk</font></h1>
                </td>
            </tr>
            <tr>
                <td width="130"><font color="white">Barcode</font></td>
                <td><input type="text" name="barcode_number" style="width: 100%; box-sizing: border-box;"></td>
            </tr>
            <tr>
                <td><font color="white">Nama Produk</font></td>
                <td><input type="text" name="product_name" style="width: 100%; box-sizing: border-box;"></td>
            </tr>
            <tr>
                <td><font color="white">Harga Beli</font></td>
                <td><input type="text" name="buy_price" value="0" size="30"></td>
            </tr>
            <tr>
                <td><font color="white">Harga Jual</font></td>
                <td><input type="text" name="sell_price" value="0" size="30"></td>
            </tr>
            <tr>
                <td><font color="white">Supplier</font></td>
                <td>
                    <select name="supplier_id" style="width: 100%; box-sizing: border-box;">
                        <option value="">--- Pilih Supplier ---</option>
                        @foreach($supplier as $sup)
                            <option value="{{$sup->id}}">{{$sup->supplier_name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="padding: 10px;">
                    <button type="submit">Create</button>
                    <button type="button" onclick="history.back()">Batal</button>
                </td>
            </tr>
        </table>
    </form>
</div>
