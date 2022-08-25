<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

use Illuminate\Http\Response;
use function PHPUnit\Framework\assertEquals;
use App\Models\Movement;
use App\Models\User;
class AppTest extends TestCase
{
    protected $seed = true;

    public function test_api_retorna_ok()
    {
        $response = $this->get('/api/rank_por_movimento/1');

        $response->assertStatus(200);
    }

    public function test_valida_o_primeiro_no_rank_conforme_seed(): void
    {
        $response = $this->get('/api/rank_por_movimento/1');

        /** @var array */
        $result = (array) $response->json();
        $response->assertStatus(200);

        assertEquals('Jose', $result[0]['user_name']);
        assertEquals(190, $result[0]['value']);
    }

    public function test_valida_movimento_nao_encontrados_conforme_seed()
    {
        $this->assertDatabaseMissing ('movements', [
            'id' => 1,
            'name' => 'test_name'
        ]);
    }

    public function test_criar_movimento()
    {
        // When
        $movement = new Movement;
        $movement->id = 1;
        $movement->name = 'Deadlift';
        
        // Then
        $this->assertEquals(['id' => 1, 'name' => 'Deadlift'], $movement->jsonSerialize());
        $this->assertEquals(1, $movement->id);
        $this->assertEquals('Deadlift', $movement->name);
    }
    
    public function test_valida_user_nao_encontrados_conforme_seed()
    {
        $this->assertDatabaseMissing ('users', [
            'id' => 1,
            'name' => 'test_name'
        ]);
    }

    public function test_criar_usuario()
    {
        // When
        $user = new User;
        $user->id = 1;
        $user->name = 'Jose';
        
        // Then
        $this->assertEquals(['id' => 1, 'name' => 'Jose'], $user->jsonSerialize());
        $this->assertEquals(1, $user->id);
        $this->assertEquals('Jose', $user->name);
    }

    public function test_rota_retorna_not_found_ao_enviar_id_nao_existente(): void
    {
        $response = $this->get('/api/rank_por_movimento/215544');
        $response->assertStatus(Response::HTTP_NOT_FOUND);
    }

    public function test_rota_retorna_not_found_quando_nao_envia_id(): void
    {
        $response = $this->get('/api/rank_por_movimento/');
        $response->assertStatus(404);
    }
}
