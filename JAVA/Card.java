package JAVA;

public class Card extends Payment {
    Integer number;
    Integer cvv;
    String date;

    Card(Integer id, Integer number, Integer cvv, String date) {
        super(id);
        this.number = number;
        this.cvv = cvv;
        this.date = date;
    }
}
