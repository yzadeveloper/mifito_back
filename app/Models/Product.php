<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_product',
        'id_category',
        'dose_ha',
        'price_ml',
        'technical_comments',
        'customer_comments',
        'application_instructions',
        'magrama_pdf',
        'ecological'
   ];

   public function category(): BelongsTo
   {
       return $this->belongsTo(Category::class, 'id_category');
   }

   protected $guarded = [];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = [
        'name_product',
        'id_category',
        'dose_ha',
        'price_ml',
        'technical_comments',
        'customer_comments',
        'application_instructions',
        'magrama_pdf',
        'ecological'
   ];
    

    // public function pedidos(){
    //     return $this->belongsToMany(Pedido::class, 'plato_pedido', 'id_plato', 'id_pedido')->withPivot('cantidad_platos');
    // }

    public function categories(){
        return $this->belongsTo(Category::class, 'id_category');
    }
}
