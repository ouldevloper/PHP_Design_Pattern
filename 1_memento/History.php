 <?php



class History
{
    private array $states = [];

    public final function push(mixed $state)
    {
        array_push($this->states, $state);
    }

    public final function restore()
    {
        return array_pop($this->states);
    }

}