<?php

namespace BinaryStudioAcademy\Task2;

class EmojiGenerator
{
    private $emojis = [
        "\u{1F600}",
        "\u{1F603}",
        "\u{1F604}",
        "\u{1F601}",
        "\u{1F606}",
        "\u{1F605}",
        "\u{1F602}"
    ];

    public function generate()
    {
        for ($i = 0; $i <= 6; $i++) {
            yield $this->emojis[$i];
        }
    }
}
