<?php

namespace Tests\Unit;

use Tests\TestCase;

class MerkTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_merk_same_name()
    {
        $response = $this->post('/admin/merk',[
            'name' => 'Asus'
        ]);

        $response->assertStatus(302);
    }

    public function test_create_merk()
    {
        $response = $this->post('/admin/merk',[
            'name' => 'HP'
        ]);

        $response->assertRedirect(route('merk.index'));
    }

    public function test_edit_merk()
    {
        $id = '7';
        $response = $this->put('/admin/merk/'. $id ,[
            'name' => 'Alienware'
        ]);

        $response->assertRedirect(route('merk.index'));
    }

    public function test_delete_merk()
    {
        $id = '7';
        $response = $this->delete('/admin/merk/'. $id);

        $response->assertRedirect(route('merk.index'));
    }
}
