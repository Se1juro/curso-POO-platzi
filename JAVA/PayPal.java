package JAVA;

public class PayPal extends Payment {
    String email;

    PayPal(Integer id, String email) {
        super(id);
        this.email = email;
    }
}
