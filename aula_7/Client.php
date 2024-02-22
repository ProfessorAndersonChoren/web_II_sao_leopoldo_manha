<?php
class Client
{
    // Atributo/Propriedade/Variável de instancia
    private string $cpf;
    private string $fullname;
    private string $phone;
    private bool $status;

    private array $fillable;

    public function __construct(string $cpf)
    {
        $this->cpf = $cpf;
        $this->fillable = ['fullname', 'phone', 'status'];
    }

    public function __get($attribute)
    {
        return $this->$attribute;
    }

    public function __set($attribute, $value)
    {
        if (in_array($attribute, $this->fillable))
            $this->$attribute = $value;
    }

    public function __toString()
    {
        $clientStatus = ($this->status) ? 'Ativo' : 'Inativo';
        return 'Nome: ' . $this->fullname . "\nCPF: " . $this->cpf . "\nTelefone: " . $this->phone . "\nStatus: " . $clientStatus;
    }
}
