<?php

namespace Tests\Unit;

use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_category()
    {
        $response = $this->post('/admin/category',[
            'name' => 'Headset'
        ]);

        $response->assertRedirect(route('category.index'));
    }

    public function test_duplicate_create_category()
    {
        $response = $this->post('/admin/category',[
            'name' => 'Laptop'
        ]);

        $response->assertStatus(302);
    }

    public function test_edit_category()
    {
        $id = '15';
        $response = $this->put('/admin/category/'. $id ,[
            'name' => 'Earphone'
        ]);

        $response->assertRedirect(route('category.index'));
    }

    public function test_delete_category()
    {
        $id = '15';
        $response = $this->delete('/admin/category/'. $id);

        $response->assertRedirect(route('category.index'));
    }
}
