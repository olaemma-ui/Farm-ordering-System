<?php 

class OrderModel {
    private int $transactionId;
    private float $totalCost;
    private string $orderDate;
    private string $orderStatus;
    private int $userId;
    private int $orderId;
    private string $address;

    public function __construct(
        int $transactionId,
        float $totalCost,
        string $orderDate,
        string $orderStatus,
        int $userId,
        int $orderId,
        string $address
    ) {
        $this->transactionId = $transactionId;
        $this->totalCost = $totalCost;
        $this->orderDate = $orderDate;
        $this->orderStatus = $orderStatus;
        $this->userId = $userId;
        $this->orderId = $orderId;
        $this->address = $address;
    }

    public function getTransactionId(): int {
        return $this->transactionId;
    }

    public function getTotalCost(): float {
        return $this->totalCost;
    }

    public function getOrderDate(): string {
        return $this->orderDate;
    }

    public function getOrderStatus(): string {
        return $this->orderStatus;
    }

    public function getUserId(): int {
        return $this->userId;
    }

    public function getOrderId(): int {
        return $this->orderId;
    }

    public function getAddress(): string {
        return $this->address;
    }

    public function toArray(): array {
        return [
            'transactionId' => $this->transactionId,
            'totalCost' => $this->totalCost,
            'orderDate' => $this->orderDate,
            'orderStatus' => $this->orderStatus,
            'userId' => $this->userId,
            'orderId' => $this->orderId,
            'address' => $this->address,
        ];
    }
}

// Example usage:
// $order = new OrderDTO(12345, 99.99, "2024-03-18", "Shipped", 456, 789);
// print_r($order->toArray());
