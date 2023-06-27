<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use App\Models\Product;
use Database\Factories\ProductFactory;


class ProductTest extends TestCase
{
   const PRODUCTS_URL = '/api/products';
    

     /**
     *
     *
     * @test - for index
     */
    public function test_endpoint_index()
    {
        $response = $this->get(self::PRODUCTS_URL."/index");
        $response->assertStatus(200);
    }

    
     /**
     *
     *
     * @test - for creating a product
     */
    public function test_endpoint_create()
    {
        //1st comment
        $response = $this->post(self::PRODUCTS_URL."/create");
        $response->assertStatus(200);

        //2nd comment
        // $data = [
        //     'product_name' => $this->faker->randomElement(["Addidas", "Nike", "Reebok", "Pony"]),
        //     'product_price' => $this->faker->randomFloat(),
        //     'quantity' => $this->faker->randomDigit(),
        //     'product_status' => $this->faker->randomElement(["Active", "InActive"]),
        // ];

        // $response = $this->post(self::PRODUCTS_URL."/create", $data);
        // $response->assertStatus(201);
    }


    /**
     *
     *
     * @test - for showing specific product
     */
    public function test_endpoint_show_specific_product()
    {
        //1st comment
        $response = $this->post(self::PRODUCTS_URL."/show");
        $response->assertStatus(200);

        //2nd comment
        // $data = [
        //     'id' => $this->faker->randomDigit()
        // ];

        // $response = $this->post(self::PRODUCTS_URL."/show",$data);
        
        // $response->assertStatus(404);
    }
    
     /**
     *
     *
     * @test - for updating a product
      */
    public function test_endpoint_update()
    {
        //1st comment
        $response = $this->put(self::PRODUCTS_URL."/update");
        $response->assertStatus(200);

        //2nd comment
        // $product = Product::factory()->create();
        
        // $updatedData = [
        //     'id' => $product->id,
        //     'product_price' => $this->faker->randomNumber(2),   
        //     'quantity' => $this->faker->randomDigit(),
        //     'product_status' => $this->faker->randomElement(["Active", "InActive"])
        // ];

        // $response = $this->put(self::PRODUCTS_URL."/update", $updatedData);
        // $response->assertStatus(200);
        // $this->assertDatabaseHas('products', $updatedData);
    }

    
     /**
     *
     *
     * @test
     */
    public function test_endpoint_delete()
    {
        //1st comment
        $response = $this->delete(self::PRODUCTS_URL."/delete");
        $response->assertStatus(200);

        //2nd comment
        // $product = Product::factory()->create();

        // $deleteData = [
        //     'id' => $product->id
        // ];

        // $response = $this->delete(self::PRODUCTS_URL."/delete", $deleteData);
        // $response->assertStatus(204);
        // $this->assertDatabaseMissing('products', ['id' => $product->id]);
    }

    public function test_invalid_input_create()
    {
        // $data = [
        //     //'product_name' => $this->faker->randomElement(["Addidas", "Nike", "Reebok", "Pony"]),
        //     'product_name' => $this->faker->randomFloat(),
        //     'product_price' => $this->faker->randomFloat(),
        //     'quantity' => $this->faker->randomElement(["", null]),
        //     //'quantity' => $this->faker->randomDigit(),
        //     'product_status' => $this->faker->randomElement(["Active", "InActive"])
        // ];

        // $response = $this->post(self::PRODUCTS_URL."/create", $data);
        // $response->assertStatus(201);
    }



   
}
