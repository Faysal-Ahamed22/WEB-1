<?php

class Graph {
    private $adjacencyList = [];

    public function addEdge($vertex, $edge) {
        if (!isset($this->adjacencyList[$vertex])) {
            $this->adjacencyList[$vertex] = [];
        }
        $this->adjacencyList[$vertex][] = $edge;
    }

    public function bfs($start) {
        $visited = [];
        $queue = [];
        array_push($queue, $start);
        $visited[$start] = true;
        while (!empty($queue)) {
            $current = array_shift($queue);
            echo $current . " ";
            foreach ($this->adjacencyList[$current] as $neighbor) {
                if (!isset($visited[$neighbor])) {
                    $visited[$neighbor] = true;
                    array_push($queue, $neighbor);
                }
            }
        }
    }
}

$graph = new Graph();
$graph->addEdge(0, 1);
$graph->addEdge(0, 2);
$graph->addEdge(1, 2);
$graph->addEdge(2, 0);
$graph->addEdge(2, 3);
$graph->addEdge(3, 3);

echo "BFS starting from vertex 2: ";
$graph->bfs(2);
echo "\n";

?>
