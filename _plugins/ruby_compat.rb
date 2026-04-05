# frozen_string_literal: true

# This plugin provides compatibility for older gems (like liquid-4.0.3) 
# running on modern Ruby (3.2 / 4.0+) where the taint mechanism was completely removed.
class Object
  def tainted?
    false
  end

  def taint
    self
  end

  def untaint
    self
  end
end